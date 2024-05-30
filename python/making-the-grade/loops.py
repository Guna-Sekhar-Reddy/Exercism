"""Functions for organizing and calculating student exam scores."""


def round_scores(student_scores):
    """Round all provided student scores.

    :param student_scores: list - float or int of student exam scores.
    :return: list - student scores *rounded* to nearest integer value.
    """
    l=len(student_scores)
    
    for i in range(0,l):
        student_scores[i]=round(student_scores[i])
    return student_scores
    pass


def count_failed_students(student_scores):
    """Count the number of failing students out of the group provided.

    :param student_scores: list - containing int student scores.
    :return: int - count of student scores at or below 40.
    """
    count=0
    for i in student_scores:
       if i<=40:
           count=count+1
    return count
    pass


def above_threshold(student_scores, threshold):
    """Determine how many of the provided student scores were 'the best' based on the provided threshold.

    :param student_scores: list - of integer scores.
    :param threshold: int - threshold to cross to be the "best" score.
    :return: list - of integer scores that are at or above the "best" threshold.
    """
    a=list()
    for i in student_scores:
        if(i>=threshold):
            a.append(i)
    return a
    pass


def letter_grades(highest):
    """Create a list of grade thresholds based on the provided highest grade.

    :param highest: int - value of highest exam score.
    :return: list - of lower threshold scores for each D-A letter grade interval.
            For example, where the highest score is 100, and failing is <= 40,
            The result would be [41, 56, 71, 86]:

            41 <= "D" <= 55
            56 <= "C" <= 70
            71 <= "B" <= 85
            86 <= "A" <= 100
    """
    #rg=int((highest-40)/4)
    #score=list()
    #score.append(41)
    #for i in range(0,4):
     #   score.append(rg*(i+1)+41)
    #return score


    step = int((highest-40)/4)
    return [41 + step*i for i in range(4)]
    pass


def student_ranking(student_scores, student_names):
    """Organize the student's rank, name, and grade information in descending order.

    :param student_scores: list - of scores in descending order.
    :param student_names: list - of string names by exam score in descending order.
    :return: list - of strings in format ["<rank>. <student name>: <score>"].
    """
    l=len(student_names);
    rank_list=list()
    for i in range(l):
        rank_list.append("{}. {}: {}".format(i+1,student_names[i],student_scores[i]))
    return rank_list
    pass


def perfect_score(student_info):
    """Create a list that contains the name and grade of the first student to make a perfect score on the exam.

    :param student_info: list - of [<student name>, <score>] lists.
    :return: list - first `[<student name>, 100]` or `[]` if no student score of 100 is found.
    """
    for student in student_info:
        if(student[1]==100):
            return student
    return []
    pass
