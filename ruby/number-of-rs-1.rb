test_cases = gets.chomp.strip.to_i

input = []
test_cases.times do  
  input <<  gets.chomp.strip
end

out = []
input.each do |str|
  arr = str.scan(/((.)\2*)/).map{|s, c| [c, s.length]}
  len = arr.length
  temp = []
 # print arr
 # puts str.length
  (0...len).each do |i|
    tmp = arr[i]
    #puts tmp.length 
    if tmp[0] == 'K' || (tmp[0] == 'R' && (arr.length > 1))
      prev = arr[i - 1][1] if i != 0
      prev = 0 if i == 0
      current = tmp[1]
      next_val =  arr[i + 1][1] if i != len - 1
      next_val = 0 if i == len - 1
      sum = prev + current + next_val
      temp << sum
    elsif tmp[0] == 'R' && (arr.length == 1)
        temp << tmp[1] - 1
    end
  end
  val = temp.max
  val = 0 if temp.max.nil?
  out << val
end
puts out
